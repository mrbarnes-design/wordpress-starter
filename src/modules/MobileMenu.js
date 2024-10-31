class MobileMenu {
    constructor() {
        this.btn = document.querySelector('.btn')
        this.events()
    }
    events() {
        this.btn.addEventListener('click', () => this.openAlertBox())
    }

    openAlertBox() {
        alert('clicked!')
    }
}

export default MobileMenu