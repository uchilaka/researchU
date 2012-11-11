$(function() {
    
    function disableSearchButton() {
        $('#mainPageSearchButton').css({
            background: '#E8E8E8'
        })
        $('#mainPageSearchButton').attr("disabled","disabled")
    }
    
    
    function enableSearchButton() {
        $('#mainPageSearchButton').removeAttr("disabled")
        $('#mainPageSearchButton').css({
            //// Be sure to change this to the style background color after changes to the CSS file
            background: '#8cc63f'
        })
    }
    
    $('#mainPageSearch').keyup(function() {
        var searchSeed = $(this)
        if (searchSeed.val().length>0) {
            enableSearchButton();
        }
        else {
            disableSearchButton();
        }
    })
    
    disableSearchButton();
    
})