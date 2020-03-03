$(document).ready(()=>{
  var double_click_allowed = window.localStorage.getItem('double-click');
  console.log({double_click_allowed})

  if (double_click_allowed) {
    const style = document.createElement('style');
    style.type = 'text/css'
    double_click_allowed &&
    style.appendChild(document.createTextNode(`
      .js-e3article:hover {
        border:2px dashed red;
      }
      img.right-logo {
        border:2px dashed red;        
      }
    `))

    const head = document.getElementsByTagName('head')[0];
    head.appendChild(style)



      const _body = document.getElementsByTagName('body');
      _body[0].addEventListener('dblclick', (e)=>{
        //const target = e.target;
        //console.log('>> double-click ', e.target)
        let target = e.target;
        if (!target.classList.contains('js-e3article')) {
          target = target.closest('.js-e3article');
        }
        //console.log('>> double-click ', target)
        if (target) {
          const ai = $(target).attr('id')
          const sku = $(target).data('sku')
          //console.log({sku})
          //console.log('>> double-click id:', $(target).attr('id'))
          const url = (ai.startsWith('/'))?
            `editora.us/edit-article?fn=${location.hostname}/${ai.substring(1)}.md`
            : `http://ultimheat.co.th/editora/edit-article/${ai}?url=${document.location.host}${document.location.pathname}`;
          console.log({url});

          console.log(document.location)

          window.open(url, '_blank')
        }
      })



  }



  /*
  $('#submit').on('click', function(e) {
    console.log('intercepted submit.')
    $('input[name=success]').attr('type', 'text');
    return false;
  })*/


})
