function showMore() {
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("toggleButton");

  if (moreText.classList.contains("expanded")) {
    // إذا النص موسع، نخفيه
    moreText.classList.remove("expanded");
    btnText.textContent = "اقرأ المزيد";
  } else {
    // إذا النص مخفي، نظهره
    moreText.classList.add("expanded");
    btnText.textContent = "اقرأ أقل";
  }
}
