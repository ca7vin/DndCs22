let spells = document.querySelectorAll('.spells');
let search = document.querySelector('#spellSearch');

search.addEventListener('change', () =>{
  spells.forEach(element => {
  if (!element.innerText.toLowerCase().includes(search.value.toLowerCase())) {
      element.parentElement.parentElement.classList.add('hidden');
  } else {
    element.parentElement.parentElement.classList.remove('hidden');
  }
});
})

// filters
let filterWizardBtn = document.querySelector('#filterWizardBtn');
let filterWizardContent = document.querySelector('#filterWizardContent')
let filterDruidBtn = document.querySelector('#filterDruidBtn');
let filterDruidContent = document.querySelector('#filterDruidContent')
let filterSorcererBtn = document.querySelector('#filterSorcererBtn');
let filterSorcererContent = document.querySelector('#filterSorcererContent')
let filterClericBtn = document.querySelector('#filterClericBtn');
let filterClericContent = document.querySelector('#filterClericContent')
let filterWarlockBtn = document.querySelector('#filterWarlockBtn');
let filterWarlockContent = document.querySelector('#filterWarlockContent')
let filterBardBtn = document.querySelector('#filterBardBtn');
let filterBardContent = document.querySelector('#filterBardContent')
let filterRangerBtn = document.querySelector('#filterRangerBtn');
let filterRangerContent = document.querySelector('#filterRangerContent')
let filterPaladinBtn = document.querySelector('#filterPaladinBtn');
let filterPaladinContent = document.querySelector('#filterPaladinContent')
let spellClass= document.querySelectorAll('.spellClass')

filterWizardBtn.addEventListener('click', () =>{
  spellClass.forEach(element => {
    if (!element.innerText.toLowerCase().includes(filterWizardContent.innerText.toLowerCase())) {
      element.parentElement.parentElement.parentElement.classList.add('hidden');
    } else {
      element.parentElement.parentElement.parentElement.classList.remove('hidden');
    }
  });
})

filterDruidBtn.addEventListener('click', () =>{
    spellClass.forEach(element => {
      if (!element.innerText.toLowerCase().includes(filterDruidContent.innerText.toLowerCase())) {
        element.parentElement.parentElement.parentElement.classList.add('hidden');
      } else {
        element.parentElement.parentElement.parentElement.classList.remove('hidden');
      }
    });
  })

  filterSorcererBtn.addEventListener('click', () =>{
    spellClass.forEach(element => {
      if (!element.innerText.toLowerCase().includes(filterSorcererContent.innerText.toLowerCase())) {
        element.parentElement.parentElement.parentElement.classList.add('hidden');
      } else {
        element.parentElement.parentElement.parentElement.classList.remove('hidden');
      }
    });
  })

  filterClericBtn.addEventListener('click', () =>{
    spellClass.forEach(element => {
      if (!element.innerText.toLowerCase().includes(filterClericContent.innerText.toLowerCase())) {
        element.parentElement.parentElement.parentElement.classList.add('hidden');
      } else {
        element.parentElement.parentElement.parentElement.classList.remove('hidden');
      }
    });
  })

  filterWarlockBtn.addEventListener('click', () =>{
    spellClass.forEach(element => {
      if (!element.innerText.toLowerCase().includes(filterWarlockContent.innerText.toLowerCase())) {
        element.parentElement.parentElement.parentElement.classList.add('hidden');
      } else {
        element.parentElement.parentElement.parentElement.classList.remove('hidden');
      }
    });
  })

  filterBardBtn.addEventListener('click', () =>{
    spellClass.forEach(element => {
      if (!element.innerText.toLowerCase().includes(filterBardContent.innerText.toLowerCase())) {
        element.parentElement.parentElement.parentElement.classList.add('hidden');
      } else {
        element.parentElement.parentElement.parentElement.classList.remove('hidden');
      }
    });
  })

  filterRangerBtn.addEventListener('click', () =>{
    spellClass.forEach(element => {
      if (!element.innerText.toLowerCase().includes(filterRangerContent.innerText.toLowerCase())) {
        element.parentElement.parentElement.parentElement.classList.add('hidden');
      } else {
        element.parentElement.parentElement.parentElement.classList.remove('hidden');
      }
    });
  })

  filterPaladinBtn.addEventListener('click', () =>{
    spellClass.forEach(element => {
      if (!element.innerText.toLowerCase().includes(filterPaladinContent.innerText.toLowerCase())) {
        element.parentElement.parentElement.parentElement.classList.add('hidden');
      } else {
        element.parentElement.parentElement.parentElement.classList.remove('hidden');
      }
    });
  })


 function imgWindow() {
  window.open("image") }
