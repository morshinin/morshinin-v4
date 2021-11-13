// Button load more
const loadBtn = document.querySelector('#loadBtn')
const portfolioRows = document.querySelectorAll('.section-portfolio .row')

function revealRow(e) {
  console.log('ok')
  e.preventDefault()
  portfolioRows.forEach(row => {
    if (row.classList.contains('u-hidden')) {
      row.classList.remove('u-hidden')
    } else {
      loadBtn.classList.add('u-hidden')
    }
  })
}

loadBtn.addEventListener('click', revealRow)
loadBtn.addEventListener('touchstart', revealRow)