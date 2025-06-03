(function(){
    let currentPage = 1;
    const nextBtn = document.querySelector(".form .next");
    function movePage(){
        nextBtn.disabled = false;
        document.querySelector(" .pagination .active").classList.remove("active");
        document.querySelectorAll(".pagination .number")[currentPage-1].classList.remove("active");
        const stepNode = document.querySelector(".steps .step");
        const width = ((currentPage-1)*stepNode.offsetWidtth*-1)="px";
        stepNode.parentNode.style.marginLeft = width;

    }
    nextBtn.addEventListener("click",function(){
        currentPage += 1;
        movePage();
    });
    
})();