$(document).ready(function () {
  $("#slider").slick({
    autoplay: false,
    fade: true,
    dots: true,
    arrows: false,
    autoplaySpeed: 2000,
    appendDots: ".custom-dots",
    mobileFirst: true,
    responsive: [{
      breakpoint: 600,
      settings: {
        autoplay: true
      }
    }]

  });
  const menuButton = $(".menu-button");
  const overlay = $(".dark-overlay");
  const menu = $(".mobile-menu");
  const links = menu.find(".has-submenu a");

  links.on("click", function () {
    const $this = $(this);
    $this.parent(".has-submenu").toggleClass("opened");
    $this.next("ul").slideToggle(500, function () {
      const $this = $(this);
      if ($this.is(":hidden")) {
        $this.find("ul").hide();
        $this.find("li.has-submenu").removeClass("opened");
      }
    });
  });

  menuButton.add(overlay).click(function (e) {
    e.preventDefault();
    overlay.toggleClass("visible");
    menu.toggleClass("visible");
  });
});

new SmoothScroll('a[href*="#"]', {
  speed: 500,
  offset: "40px"
});
new SmoothScroll('form[action*="#"]', {
  speed: 500,
  offset: "40px"
});
const productBtns = document.querySelectorAll('.product-box__btn'),
  productItems = document.querySelectorAll('.product-box__item'),
  finalQuantity = document.getElementById('final-quantity'),
  finalPrice = document.getElementById('final-price');


productBtns.forEach(v => {
  v.addEventListener('click', function (e) {
    let thisProdPrice = this.parentNode.parentNode.dataset.price;
    totalPrice(thisProdPrice);
  });
});

function totalPrice(thisProdPrice) {
  const currentFinalPrice = parseInt(finalPrice.innerHTML);
  finalPrice.innerHTML = currentFinalPrice + parseInt(thisProdPrice);
}

function filterCategory(e) {
  const target = e.target;
  productItems.forEach(v => {
    if (target.value == v.dataset.category || target.value == v.dataset.all) {
      v.style.display = "flex";
    } else {
      v.style.display = "none";

    }
  });
}
document.getElementById('select-category').addEventListener('change', filterCategory);
document.getElementById('confirm-window__close').addEventListener('click', function (e) {
  document.getElementById('confirm-container').style.display = "none";
});

document.getElementById('checkout').addEventListener('click', function (e) {
  document.getElementById('confirm-container').style.display = "block";
});

const f = document.getElementById("confirm-window__f");
const els = f.elements;
const news = document.getElementById("newsletter__f");

news.addEventListener("submit", subsSubmit);
f.addEventListener("submit", handleSubmit);
document.addEventListener("input", handleInput, false);
f.phone.addEventListener("input", phoneFormat);


function phoneFormat(e) {
  const el = e.target;

  let x = el.value
    .replace(/\D/g, "")
    .match(/(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);

  const st = !x[2] ?
    x[1] :
    `(${x[1]}) - ${x[2]}` +
    (!x[3] ? "" : ` - ${x[3]}`) +
    (!x[4] ? "" : ` - ${x[4]}`);

  el.value = st;
}

function handleInput(e) {
  const item = e.target;
  if (item.dataset.validate === "1") {
    const cls = ".error_" + item.name;
    const err = document.querySelector(cls);
    err.textContent = "";
    err.classList.remove("text-danger");
    item.classList.remove("is-invalid");
  }
}


function subsSubmit(e) {
  const inp = document.getElementById('newsletter__inp');
  if (!inp.value.trim()) {
    e.preventDefault();
    const cls = ".error_" + inp.name;
    const err = document.querySelector(cls);
    err.textContent = "This field cannot be empty";
    err.classList.add("text-danger");
    inp.classList.add("is-invalid");
  }

}

function handleSubmit(e) {
  [...els].forEach(item => {
    if (item.dataset.validate === "1") {
      const tel = document.getElementById('confirm-window__tel');
      if (!item.value.trim() || tel.value.trim().length <= 20) {
        e.preventDefault();
        const cls = ".error_" + item.name;
        const err = document.querySelector(cls);
        err.textContent = "This field cannot be empty";
        err.classList.add("text-danger");
        item.classList.add("is-invalid");
      }
    }
  });
}