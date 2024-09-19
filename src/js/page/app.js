let $applicationContainer = $('#applications_div');

function showElements(data) {
    let i = 0;
    while (i < data.length) {
        async function fetchPage(url) {
            try {
                const response = await fetch(url);
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                const html = await response.text();
                const jsonObject = JSON.parse(html);
                
                let appHtml = `
                <div class="game_div">
                    <p class="game_name">${jsonObject['id']}</p>
                    <p class="game_name">${jsonObject['name']}</p>
                    <p class="game_name">${jsonObject['descripton']}</p>
                    <p class="game_name">${jsonObject['detailDescription']}</p>
                </div>
                `;
                $applicationContainer.append(appHtml);

            } catch (error) {
                console.error('Error fetching the page:', error);
            }
        }
        
        fetchPage("https://article.local/" + data[i]);
        i++;
    }
}