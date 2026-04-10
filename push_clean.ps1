$ErrorActionPreference = 'SilentlyContinue'
Stop-Process -Name git -Force
cmd /c rmdir /s /q .git
git init
git config core.autocrlf false
git config advice.addWarnings false
git config http.postBuffer 524288000
git config user.name "dalimoussa"
git config user.email "dalimoussa@users.noreply.github.com"
Add-Content -Path .gitignore -Value "*.less`r`n.ssh`r`n.pki`r`n.gnome2`r`n.subversion`r`n*.zip`r`nbk_zip/"
git remote add origin https://github.com/dalimoussa/dm110.git
git branch -M main

Write-Host "1. Initial Commit (Root Files, _trash, etc, www)"
Get-ChildItem -File -Depth 0 | ForEach-Object { git add $_.FullName }
git add _trash .composer etc www
git commit -q -m "Add core files and small folders"
git push -u origin main -f

Write-Host "2. Pushing public_html/images..."
git add public_html/images
git commit -q -m "Add public_html/images"
git push

Write-Host "3. Pushing public_html/test..."
git add public_html/test
git commit -q -m "Add public_html/test"
git push

Write-Host "4. Pushing public_html/__trash and __pma..."
git add public_html/__trash public_html/__pma
git commit -q -m "Add public_html/__trash and __pma"
git push

Write-Host "5. Pushing rest of public_html..."
git add public_html
git commit -q -m "Add rest of public_html"
git push

Write-Host "6. Pushing vendor..."
git add vendor
git commit -q -m "Add vendor directory"
git push

Write-Host "DONE!"