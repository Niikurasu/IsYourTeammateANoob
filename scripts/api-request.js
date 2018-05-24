// programmed by Nikurasu.

// API Key -> 78d9cdf2-5e59-433f-9116-05dbd02e6564

function MyController($scope, $http) {
    var platform = "pc";
    var name = 'Nikurasu.'
        $http.get('https://api.fortnitetracker.com/v1/profile/' + platform + '/' + name + '', {
            headers: {'TRN-Api-Key': '78d9cdf2-5e59-433f-9116-05dbd02e6564'}
        });

 }

function httpGet(theUrl, key)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.setRequestHeader("TRN-Api-Key:", key);
    xmlHttp.send( null );
    return xmlHttp.responseText;
}

function getStats(platform, name)
{
    //console.log('https://api.fortnitetracker.com/v1/profile/' + platform + '/' + name + '')
   // httpGet('https://api.fortnitetracker.com/v1/profile/' + platform + '/' + name + '', '78d9cdf2-5e59-433f-9116-05dbd02e6564')
   return send(platform, name)
}

function send(platform, name) 
{
    $http.get('https://api.fortnitetracker.com/v1/profile/' + platform + '/' + name + '', {
        headers: {'TRN-Api-Key': '78d9cdf2-5e59-433f-9116-05dbd02e6564'}
    });
}