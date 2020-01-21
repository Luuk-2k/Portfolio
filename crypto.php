<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yes</title>
</head>
<body>
<button id="getText">Get Data</button>
<div id="output"></div>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    var getFullURL = function (url, options) {
        const params = [];
        for (let key in options) {
            params.push(`${key}=${options[key]}`);
        }
        return url + '?' + params.join("&");
    };

    var apiKey = "e3ae19d1c8eddbf80e726017530605d9af379e4014237a07c843b3db2c0af419";

    var baseUrl = "https://min-api.cryptocompare.com/data/price";

    var options = {
        fsym: "LTC",
        tsyms: "EUR"
    };

    var headers = {
        "Authorization": "Apikey " + apiKey
    };

    var fullURL = getFullURL(baseURL, options);

    axios.get(fullURL, {headers: headers})
        .then(function (response) {
            console.log(response.data);
            console.log(response.status);
            console.log(response.statusText);
            console.log(response.headers);
            console.log(response.config);
        });



    //     document.getElementById('getText').addEventListener('click', getText);
    //
    //     function getText() {
    //
    //         fetch('https://min-api.cryptocompare.com/data/pricemulti?fsyms=ltc&tsyms=EUR&api_key=e3ae19d1c8eddbf80e726017530605d9af379e4014237a07c843b3db2c0af419')
    //             .then((res) => res.json())
    //             .then((data) => {
    //                 let output = '<h1>Ltc</h1>';
    //                 console.log(data);
    //                 Object.keys(data).forEach(function (user) {
    //                     output += `
    //                     <ul>
    // <li>Price: ${user.name}</li>
    //                     `
    //                 });
    //                 document.getElementById('output').innerHTML = output;
    //             })
    //     }
</script>
</body>
</html>