jQuery(document).ready(function($) {
    $('#faq-search').on('input', function() {
        var searchValue = $(this).val();
        $('#faq-search-results').empty();
        if (searchValue === '') {
            $('.faq').show();
            $('#faq-search-results').hide();
        } else {
            $('.faq').hide();
            $('#faq-search-results').show();
            var resultsFound = false;
            $('.faq').each(function() {
                var question = $(this).find('.faq-question').text();
                var answer = $(this).find('.faq-answer').html();
                if (question.indexOf(searchValue) !== -1 || question.toLowerCase().indexOf(searchValue) !== -1 || 
                answer.indexOf(searchValue) !== -1 || answer.toLowerCase().indexOf(searchValue) !== -1) {
                    var result = '<div class="faq"><h4 class="faq-question">' + question + '</h4>' + answer +'</div>';
                    $('#faq-search-results').append(result);
                    resultsFound = true;
                }
            });
            if (!resultsFound) {
                var noResults = '<div class="faq-result"><p>No results found.</p></div>';
                $('#faq-search-results').append(noResults);
            }
        }
    });

    $('.faq').accordion({
        heightStyle: 'content',
        collapsible: true,
        active: false
    });   
});