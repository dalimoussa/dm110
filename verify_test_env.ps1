$ErrorActionPreference = 'Stop'

$targets = @(
    @{ Url = 'https://test.dm110.jp/'; Expected = @(200,401) },
    @{ Url = 'https://test.dm110.jp/sitemap.php'; Expected = @(200,401) },
    @{ Url = 'https://test.dm110.jp/llms.txt'; Expected = @(200,401) },
    @{ Url = 'https://test.dm110.jp/koe.htm'; Expected = @(301,302,401) }
)

$user = $env:TEST_DM110_USER
$pass = $env:TEST_DM110_PASS
$useAuth = -not [string]::IsNullOrWhiteSpace($user) -and -not [string]::IsNullOrWhiteSpace($pass)
$cred = $null
if ($useAuth) {
    $secure = ConvertTo-SecureString $pass -AsPlainText -Force
    $cred = New-Object System.Management.Automation.PSCredential($user, $secure)
}

function Invoke-Check($url, $credObj) {
    try {
        if ($credObj -ne $null) {
            return Invoke-WebRequest -Uri $url -Method Head -MaximumRedirection 0 -Credential $credObj -ErrorAction Stop
        }
        return Invoke-WebRequest -Uri $url -Method Head -MaximumRedirection 0 -ErrorAction Stop
    } catch {
        if ($_.Exception.Response) { return $_.Exception.Response }
        throw
    }
}

$failed = $false
foreach ($t in $targets) {
    $resp = Invoke-Check -url $t.Url -credObj $cred
    if ($resp.StatusCode -is [int]) {
        $status = [int]$resp.StatusCode
    } else {
        $status = [int]$resp.StatusCode.value__
    }
    $location = $resp.Headers.Location

    $ok = $t.Expected -contains $status
    if (-not $ok) { $failed = $true }

    $mark = if ($ok) { 'OK ' } else { 'NG ' }
    Write-Host ("[{0}] {1} -> {2} location={3}" -f $mark, $t.Url, $status, $location)
}

if ($failed) {
    Write-Host 'One or more checks failed.'
    exit 1
}

Write-Host 'All checks passed based on expected status codes.'
