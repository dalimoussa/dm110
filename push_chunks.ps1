$ErrorActionPreference = 'SilentlyContinue'
cmd /c rmdir /s /q .git
git init
git config core.autocrlf false
git config advice.addWarnings false
git config user.name "dalimoussa"
git config user.email "dalimoussa@users.noreply.github.com"
Add-Content -Path .gitignore -Value "*.less`r`n.ssh`r`n.pki`r`n.gnome2`r`n.subversion"
git remote add origin https://github.com/dalimoussa/dm110.git
git branch -M main

Write-Host "1. Adding root files and small directories..."
git add .gitignore *.php *.html composer.json *.sh etc www .composer bk_zip _trash > $null 2>&1
git commit -q -m "Add root files and small directories"
git push -u origin main -f

Write-Host "2. Adding vendor..."
git add vendor > $null 2>&1
git commit -q -m "Add vendor directory"
git push

Write-Host "3. Adding public_html subdirectories in chunks..."
$subdirs = Get-ChildItem -Path public_html -Directory
$batchSize = 20
for ($i = 0; $i -lt $subdirs.Count; $i += $batchSize) {
    $batch = $subdirs[$i..([math]::Min($i + $batchSize - 1, $subdirs.Count - 1))] | ForEach-Object { $_.FullName }
    git add $batch > $null 2>&1
    git commit -q -m "Add public_html chunk $([math]::Floor($i / $batchSize) + 1)"
    git push
}

Write-Host "4. Adding remaining files in public_html..."
git add public_html > $null 2>&1
git commit -q -m "Add root files in public_html"
git push

Write-Host "5. Adding anything else..."
git add . > $null 2>&1
git commit -q -m "Add remaining untouched files"
git push

Write-Host "DONE!"
