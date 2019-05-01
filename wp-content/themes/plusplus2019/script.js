function toggleIcon() {
    $('.icon').on('click', function(){
        $('.icon').toggleClass('active');
        $('.mobile').slideToggle(300);
    })
}

function closeMobileMenu(){
    $('.mobile').on('click', 'a', function(){
        $('.icon').trigger('click');
    })
}



f

//when the page loads call toggleIcon;
$(toggleIcon);
$(closeMobileMenu);
