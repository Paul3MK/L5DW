function toggleForm(event) {
    var f1 = document.getElementById("firstForm");
    var f2 = document.getElementById("secondForm");
    if(event.target.id=='nextForm'){
        alert(event.target.id);
        anime({
            targets: '#firstForm',
            translateX: -550,
            easing: 'linear',
            duration: 400
        })
        setTimeout(() => {
            f1.classList.remove("grid");
            f1.classList.add("hidden");
            f2.classList.remove("hidden");
            f2.classList.add("grid");
        }, 300)
        anime({
            targets: '#secondForm',
            translateX: -550,
            easing: 'linear',
            duration: 400
        })
    }else{
        anime({
            targets: '#secondForm',
            translateX: 550,
            easing: 'linear',
            duration: 400
        })
        setTimeout(() => {
            f2.classList.remove("grid");
            f2.classList.add("hidden");
            f1.classList.remove("hidden");
            f1.classList.add("grid");
        }, 300)
        anime({
            targets: '#firstForm',
            translateX: 0,
            easing: 'linear',
            duration: 400
        })
    }
}

document.querySelector("#nextForm").addEventListener("click", toggleForm);
document.querySelector("#prevForm").addEventListener("click", toggleForm);