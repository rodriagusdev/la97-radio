# ==========================================================================
# LA 97 FM - WORDPRESS REST API DEPLOYMENT SCRIPT
# ==========================================================================
$user = "la97siempre"
$pass = "qTjp vkLE lSZH cvOc ka6h 0861"
$pair = [Convert]::ToBase64String([System.Text.Encoding]::ASCII.GetBytes("${user}:${pass}"))
$headers = @{
    "Authorization" = "Basic $pair"
    "User-Agent"    = "Antigravity-WP-Client/1.0"
    "Content-Type"  = "application/json; charset=utf-8"
}
[System.Net.ServicePointManager]::SecurityProtocol = [System.Net.SecurityProtocolType]::Tls12

$contentPath = "C:\dev\Personal\radio\pages\modo-renovacion.html"
$htmlContent = [System.IO.File]::ReadAllText($contentPath, [System.Text.Encoding]::UTF8)

$bodyPage = @{
    title   = "Inicio"
    content = $htmlContent
    status  = "publish"
    slug    = "inicio"
} | ConvertTo-Json -Depth 5

Write-Output "Deploying pages/modo-renovacion.html to Page ID 2337..."
$res = Invoke-RestMethod -Uri "https://la97.com.ar/wp-json/wp/v2/pages/2337" -Headers $headers -Method Post -Body ([System.Text.Encoding]::UTF8.GetBytes($bodyPage))
Write-Output "Published successfully! URL: $($res.link)"

$bodySettings = @{
    show_on_front = "page"
    page_on_front = 2337
} | ConvertTo-Json

$updatedSettings = Invoke-RestMethod -Uri "https://la97.com.ar/wp-json/wp/v2/settings" -Headers $headers -Method Post -Body ([System.Text.Encoding]::UTF8.GetBytes($bodySettings))
Write-Output "Front page verified: $($updatedSettings.show_on_front) (ID: $($updatedSettings.page_on_front))"
