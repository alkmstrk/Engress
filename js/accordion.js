const title = document.querySelectorAll('.jsAccordionTitle');
//forEachでtitleを一つ一つtitleEachに入れている
title.forEach(titleEach => {
//nextElementSiblingはjQueryのnext()みたいなもの
  let content = titleEach.nextElementSibling
  titleEach.addEventListener('click', () => {
    titleEach.classList.toggle('is-active')
    content.classList.toggle('is-open')
  })
});

