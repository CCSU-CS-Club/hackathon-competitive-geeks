# Geeks 00 02/25/2017 02/25/2017
$open = 1
$wwwtemp = "c:\temp\www.html"
$displaypage = "c:\temp\display.html"
Write-Host "Welcome to Geeks Web Dash" -ForegroundColor Yellow -BackgroundColor Black
while ($true) {
set-content $displaypage ""
$siteinfo = New-Object System.Collections.ArrayList
$urlfile = "C:\Dropbox\_scripts\24hoc\websites.log"
$urllist = get-content $urlfile
$htmlline1 = "<!DOCTYPE html><html lang='en-us'><head><meta http-equiv='refresh' content='30'><style>body {background: #000000;}.uni {    height: 200px;    background: red; /* For browsers that do not support gradients */        background: -webkit-linear-gradient(left top, white, grey); /* For Safari 5.1 to 6.0 */    background: -o-linear-gradient(bottom right, white, grey); /* For Opera 11.1 to 12.0 */    background: -moz-linear-gradient(bottom right, white, grey); /* For Firefox 3.6 to 15 */    background: linear-gradient(to bottom right, white, grey); /* Standard syntax (must be last) */}h1 { text-align: center;  font-style: oblique;   color : white; }.uni {   float: left;   margin: 10px;   padding: 10px;   max-width: 300px;   height: 600px;   border: 1px solid black;   box-shadow: 10px 10px 5px #888888;   padding-left: 1cm;}   </style></head><body>background: #00ff00 url('smiley.gif') no-repeat fixed center;<h1>Geek's Web-Dash</h1>"
Add-Content $displaypage $htmlline1
foreach ($url in $urllist) {
try {
$pagedata = invoke-webrequest $url
$title = ($pagedata.ParsedHtml.getElementsByTagName("Title", "title") | select -ExpandProperty innertext)
$about = ($pagedata.ParsedHtml.getElementsByName("Description","description") | select -ExpandProperty content)
$live = ($pagedata.ParsedHtml.getElementsByTagName("p")[(Get-Random -minimum 1 -maximum ($pagedata.ParsedHtml.getElementsByTagName("p").length))] | select -ExpandProperty innertext)
$images = $pagedata.ParsedHtml.images | select -ExpandProperty href
$imgnum = $pagedata.Images.Count
$hrfnum = $pagedata.Links.Count
foreach ($image in $images) {if ($image -match "logo.png" -or $image -match "logo.jpg" -or $image -match "sprites.png") {$logo = (($url+$image.replace(":","").replace(" ","")))}}
#write-host "Title: $title"
#Write-Host "Logo: $logo"
#write-host "URL: $url"
#Write-Host "About: $about"
#write-host "Live: $live"
#Write-Host "Image Count: $imgnum"
#Write-Host "Link Count: $hrfnum"
$siteline = "<div class='uni'><h2>$title</h2><p>$about.</p><p>$live.</p><p>Stats:<br>Image Count: $imgnum<br>Link Count: $hrfnum</p><br><a href='$url'>Click here to visit our website</a><br><img src='$logo' alt='Image from $title' width='50%'></div>"
add-content $displaypage $siteline
Write-Host "Page parsed!" -ForegroundColor Green -BackgroundColor Black
$pagedata = $images = $title = $logo = $url = $about = $live = $imgnum = $hrfnum = ""
}
catch  {
}}
$lastline = "</body></html>"
Add-Content $displaypage $lastline
Write-Host "Sleeping now!" -ForegroundColor Cyan -BackgroundColor Black
if ($open -eq 1) {Start-Process $displaypage; $open = 0}
sleep(40)
}