const row = document.querySelectorAll('.row');
const edit = document.querySelectorAll('.edit');

row.forEach((r) => {
  r.addEventListener("mouseenter", (e) => {
    let num = e.target.dataset.number;
    console.log(e);
    edit[num].classList.add('eext');
  })

  r.addEventListener("mouseleave", (e) => {
    let num = e.target.dataset.number;
    edit[num].classList.remove('eext');
  })
})


