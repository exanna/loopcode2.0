const imageList = document.querySelectorAll('.js-image-to-show');
const modal = document.createElement('div');
let flag = false;

imageList.forEach(image => {
    image.addEventListener('click', ({ target }) => {
        
        console.log(target)
        if(flag === false){
            flag = true;
            // const styles = window.getComputedStyle(target);
            // const url = styles.backgroundImage.slice(4, -1).replace(/"/g, "");
            
            const img = document.createElement('img');
            
            img.src = target.src;
    
            modal.classList.add('image-modal');
            modal.appendChild(img);
            document.body.appendChild(modal);
            
        } else {
            document.body.removeChild(modal);
            flag = false;
            modal.innerHTML = '';
        }
    })
})
