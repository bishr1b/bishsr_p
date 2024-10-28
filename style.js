function showMore() {
    var moreText = document.getElementById("more");
    var btnText = document.querySelector("button");
    
    if (moreText.style.display === "none") {
      moreText.style.display = "inline";
      btnText.textContent = "اقرأ أقل"; 
    } else {
      moreText.style.display = "none";
      btnText.textContent = "اقرأ المزيد";
    }
}