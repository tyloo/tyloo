$(document).ready(function() {
    /* Summernote */
    $('.summernote').summernote();
    /* /Summernote */

    /* Bootstrap TagsInput */

    var tags = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        prefetch: {
            url: '/admin/tags.json',
            filter: function(list) {
                return $.map(list, function(tag) {
                    return { name: tag }; });
            }
        }
    });
    tags.initialize();

    $('input[name="tags"]').tagsinput({
        typeaheadjs: {
            name: 'tags',
            displayKey: 'name',
            valueKey: 'name',
            source: tags.ttAdapter()
        }
    });

    /* /Bootstrap TagsInput */
});
