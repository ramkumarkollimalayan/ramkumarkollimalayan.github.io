
$(function() {
    AOS.init();
    
    $('.navbar-nav>li>a').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });

    $('a[href*="#"]').bind('click', function(e) {
        e.preventDefault();

        var target = $(this).attr("href"); 
        $('html, body').animate({
                scrollTop: $(target).offset().top
        }, 600, function() {
                location.hash = target;
        });

        return false;
    });

    $(window).scroll(function() {
        var scrollDistance = $(window).scrollTop();

        $('section').each(function(i) {
            if ($(this).position().top <= scrollDistance) {
                $('.nav-item.active').removeClass('active');
                $('.nav-item').eq(i).addClass('active');
            }
        });
    }).scroll();

    async function init () {
        const node = document.querySelector("#type-text")
        
        await sleep(1000)
        node.innerText = ""
        await node.type('')
        
        while (true) {
          await node.type('Frontend Developer')
          await sleep(2000)
          await node.delete('Frontend Developer')
          await node.type('Senior UX/UI Developer')
          await sleep(2000)
          await node.delete('Senior UX/UI Developer')
          await node.type('Web Designer')
          await sleep(2000)
          await node.delete('Web Designer')
          await node.type('Master of Computer Applications')
          await sleep(2000)
          await node.delete('Master of Computer Applications')
        }
      }
      
      
      // Source code 🚩
      
      const sleep = time => new Promise(resolve => setTimeout(resolve, time))
      
      class TypeAsync extends HTMLSpanElement {
        get typeInterval () {
          const randomMs = 100 * Math.random()
          return randomMs < 50 ? 10 : randomMs
        }
        
        async type (text) {
          for (let character of text) {
            this.innerText += character
            await sleep(this.typeInterval)
          }
        }
        
        async delete (text) {
          for (let character of text) {
            this.innerText = this.innerText.slice(0, this.innerText.length -1)
            await sleep(this.typeInterval)
          }
        }
      }
      
      customElements.define('type-async', TypeAsync, { extends: 'span' })
      init()      
});