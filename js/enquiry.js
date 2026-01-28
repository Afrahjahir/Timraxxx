document.addEventListener("DOMContentLoaded", function () {

  const enquiryBtn = document.getElementById("enquiryBtn");
  const enquirySlide = document.getElementById("enquirySlide");
  const closeEnquiry = document.getElementById("closeEnquiry");

  enquiryBtn.addEventListener("click", function () {
    enquirySlide.classList.add("active");
  });

  closeEnquiry.addEventListener("click", function () {
    enquirySlide.classList.remove("active");
  });

});

