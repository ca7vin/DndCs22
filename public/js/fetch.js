const api_url = "https://api.open5e.com/monsters/";

async function getApi(url) {
    const response = await fetch(url);

    var data = await response.json();
    console.log(data);
}

getApi(api_url);