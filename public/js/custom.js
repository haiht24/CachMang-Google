$(document).ready(function () {
    var currentKeyword = $('.keyword').data('value').trim();
    console.log(currentKeyword);
    var results = [], relatedKeywords = [];
    $('.search-result').each(function () {
        var a = {
            title: '',
            desctiprion: '',
            url: ''
        };
        var t = $(this);
        a.title = t.find('h3.title').text().trim();
        a.description = t.find('.rs-description').text().trim();
        a.url = t.find('a').attr('href');
        results.push(a);
    });

    $('.related_keywords').each(function () {
       var t = $(this);
        relatedKeywords.push(t.text());
    });
    console.log(relatedKeywords);
    $.post(url + '/save', {results: JSON.stringify(results), currentKeyword: currentKeyword, relatedKeywords: relatedKeywords}, function (response) {
        console.log(response);
    })
});