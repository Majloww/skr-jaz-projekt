//stars
const stars = document.querySelectorAll(".stars svg");

stars.forEach((star, index1) => {
    star.addEventListener("click", () => {
        console.log(index1);
        stars.forEach((star, index2) => {
            index1 >= index2 ? star.classList.add("active") : star.classList.remove("active")
        })
    })
})

//popup
function checkForm() {
    var email = document.getElementById("email").value;
    var checkbox = document.getElementById("agree");

    if (email != '' && checkbox.checked) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (emailRegex.test(email)) {
            document.getElementById('overlay').style.display = 'block';
        } else {
            alert("Please enter a valid email address!");
        }
    }
}


function hidePopup() {
    document.getElementById('overlay').style.display = 'none';
    window.location.href = 'main.php';
}
