import './bootstrap';
import gsap from "gsap";
import Flip from "gsap/Flip";

gsap.registerPlugin(Flip);
let books = gsap.utils.toArray("#book")
let state = null;
document.addEventListener("livewire:navigating", () => {
    state = Flip.getState(books);
    console.log(state)
});

document.addEventListener('livewire:navigated', () => {
    if(state) {
        //
        // Animate from the initial state to the end state
        // Flip.from(state, {duration: 2, ease: "power1.inOut"});
        Flip.from(state, {
            duration: 5,
            ease: "power1.inOut",
            absolute: true,
            onComplete: () => {
                console.log('done');
            },
        });
    }

});

