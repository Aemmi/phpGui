
    var s_index = 0;
    var i;
    showSlides();

    function showSlides(){

    var slides = document.getElementsByClassName('tgt-slider');

    for(i = 0; i < slides.length; i++){

    slides[i].style.display = "none";

    }

    s_index++;

    if(s_index > slides.length)
    {s_index = 1}

    slides[s_index-1].style.display = "block";

    setTimeout(showSlides, 5000);

}
    