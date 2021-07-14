// dismiss all option when click outside option or section that triggers option to appear.
// by adding event listener to document on click

document.addEventListener( 'click', dismissOption, false);
function dismissOption(event) {
    event.stopPropagation();
    // console.log( event.target.classList );
    if (!event.target.classList.contains( 'single-section-container' ) &&
        !event.target.classList.contains( 'section-icon' ) &&
        !event.target.classList.contains( 'summary' ) &&
        !event.target.classList.contains( 'sub-title' )
    ) {
        document.querySelectorAll('.section-option').forEach( e => e.style.display = 'none');
    }
}


// get section option that triggers its menu respectively
const arrivalSection = document.getElementById( 'arrival-section' );
const departureSection = document.getElementById( 'departure-section' );

// add event listener, pass event, option menu ids to activated, and option menu to inactivated
arrivalSection.addEventListener( 'click', event => toggleDisplay(event, 'arrival-option', 'departure-option') );
departureSection.addEventListener( 'click', event => toggleDisplay(event, 'departure-option', 'arrival-option') );
// declare toggleDisplay function
function toggleDisplay( event, activeOption, inactiveOption) {
    // get active option and inactive option, put to a variable
    activeOption = document.getElementById( activeOption );
    inactiveOption = document.getElementById( inactiveOption );
    inactiveOption.style.display = 'none';

    // toggle the display
    if ( activeOption.style.display === 'none' ) {
        activeOption.style.display = 'flex';
        return;
    }
    activeOption.style.display = 'none'
}