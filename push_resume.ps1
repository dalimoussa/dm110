$ErrorActionPreference = 'SilentlyContinue'

# Increase buffer size for large pushes
git config http.postBuffer 524288000

Write-Host "2. Retrying public_html/images..."
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