function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
function myCourseFunction(col4CourseMore) {
  var courseMore = document.getElementById(col4CourseMore);

  if (courseMore.style.display === "none") {
    // courseBtn.innerHTML = "Show More";
    courseMore.style.display = "contents";
  } else {
    // console.log("3", a.getPropertyValue("display"));
    // courseBtn.innerHTML = "Show less";
    courseMore.style.display = "none";
  }
}
