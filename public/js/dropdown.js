// set the dropdown menu element
const targetEl = document.getElementById('dropdownMenu');

// set the element that trigger the dropdown menu on click
const triggerEl = document.getElementById('dropdownButton');

// options with default values
const options = {
  placement: 'bottom',
  onHide: () => {
      console.log('dropdown has been hidden');
  },
  onShow: () => {
      console.log('dropdown has been shown');
  }
};

const dropdown = new Dropdown(targetEl, triggerEl, options);