const search = instantsearch ({
    appId:'MU1P63L0NS',
    apiKey:'c25ec898b06c05a8e645b20bc6a564a0',
    indexName:'products',
    urlSync:true
});



search.addWidget(
    instantsearch.widgets.searchBox({
        container:'#search-input'
    })
);

search.addWidget(
    instantsearch.widgets.hits({
        container:'#hits',
        hitsPerPage:10,
        templates:{
            item: document.getElementById('hit-template').innerHTML,
            empty:"No results for <em>\"{{query}}\"</em>"
        }
    })
);


search.start();
