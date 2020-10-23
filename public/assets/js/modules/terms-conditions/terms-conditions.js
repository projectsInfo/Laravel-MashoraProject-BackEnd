$(function(){
    var ar = ["أ","ب","ج","د", "ذ", "ر", "ز"];
    var length = $('.terms__main-list__title > span');
    
    
    for (var i = 0; i < length.length; i++) {
        length[i].innerText = ar[i] + " -";
    }

    var ArrayElement = Array.from(length);

    console.log(ArrayElement);

    ArrayElement.each(function() {
        console.log($(this));
    });
    
});