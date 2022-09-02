$(function () {

  // AOS
  AOS.init();

  // Mobile Nav Collapse
  $(".navbar-nav>li>a").on("click", function () {
      $(".navbar-collapse").collapse("hide");
  });

  // Navigation
  $("#scrolldown").bind("click", function (e) {
      e.preventDefault();
      $("html, body").animate(
          {
              scrollTop: $(".about").offset().top - 62,
          },
          1000
      );
  });

  $("#about").bind("click", function (e) {
      e.preventDefault();
      $("html, body").animate(
          {
              scrollTop: $(".about").offset().top - 62,
          },
          1000
      );
  });

  $("#skills").bind("click", function (e) {
      e.preventDefault();
      $("html, body").animate(
          {
              scrollTop: $(".skills").offset().top - 62,
          },
          1000
      );
  });

  $("#myworks").bind("click", function (e) {
      e.preventDefault();
      $("html, body").animate(
          {
              scrollTop: $(".myworks").offset().top - 62,
          },
          1000
      );
  });

  $("#reach_me").bind("click", function (e) {
      e.preventDefault();
      $("html, body").animate(
          {
              scrollTop: $(".reach_me").offset().top - 62,
          },
          1000
      );
  });

  // Text animation
  async function init() {
      const node = document.querySelector("#type-text");

      await sleep(1000);
      node.innerText = "";
      await node.type("");

      while (true) {
          await node.type("Frontend Developer");
          await sleep(2000);
          await node.delete("Frontend Developer");
          await node.type("Senior UX/UI Developer");
          await sleep(2000);
          await node.delete("Senior UX/UI Developer");
          await node.type("Web Designer");
          await sleep(2000);
          await node.delete("Web Designer");
          await node.type("Master of Computer Applications");
          await sleep(2000);
          await node.delete("Master of Computer Applications");
      }
  }

  const sleep = (time) => new Promise((resolve) => setTimeout(resolve, time));

  class TypeAsync extends HTMLSpanElement {
      get typeInterval() {
          const randomMs = 100 * Math.random();
          return randomMs < 50 ? 10 : randomMs;
      }

      async type(text) {
          for (let character of text) {
              this.innerText += character;
              await sleep(this.typeInterval);
          }
      }

      async delete(text) {
          for (let character of text) {
              this.innerText = this.innerText.slice(0, this.innerText.length - 1);
              await sleep(this.typeInterval);
          }
      }
  }

  customElements.define("type-async", TypeAsync, { extends: "span" });
  init();

  // Counter
  var counted = 0;
  $(window).scroll(function () {
      var oTop = $("#fact-counter").offset().top - window.innerHeight;
      if (counted == 0 && $(window).scrollTop() > oTop) {
          $(".count").each(function () {
              var $this = $(this),
                  countTo = $this.attr("data-count");
              $({
                  countNum: $this.text(),
              }).animate(
                  {
                      countNum: countTo,
                  },

                  {
                      duration: 2000,
                      easing: "swing",
                      step: function () {
                          $this.text(Math.floor(this.countNum));
                      },
                      complete: function () {
                          $this.text(this.countNum);
                      },
                  }
              );
          });
          counted = 1;
      }
  });

  // Portfolio Filter
  $('.filters ul li').click(function(){
    $('.filters ul li').removeClass('active');
    $(this).addClass('active');
    
    var data = $(this).attr('data-filter');
    $grid.isotope({
      filter: data
    })
  });
  
  var $grid = $(".grid").isotope({
    itemSelector: ".all",
    percentPosition: true,
    masonry: {
      columnWidth: ".all"
    }
  })
});
