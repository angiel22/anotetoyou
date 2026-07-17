// Hamburger menu toggle
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('open');
});

var data;

Papa.parse('../assets/NOTES.csv', {
    header: true,
    download: true,
    dynamicTyping: true,
    complete: function (results) {
        console.log(results);
        data = results.data;

        // Load the initial grid only after data is ready
        if (document.body.id === 'home-page') {
            generateInitialGrid();
        }
    }
});

// Logic only applies to index.html/gallery page
if (document.body.id === 'home-page') {
    let x = 0, y = 0;
    const step = 300;
    const gridSize = 10; // Initial 10x10 grid
    const gridGap = 10;
    let gridHeight = gridSize * step; // Initial height
    let itemIndex = 101; // Start appending from this index
    const itemsAmount = 222;

    const viewportWidth = window.innerWidth;
    const viewportHeight = window.innerHeight;
    const container = document.getElementById("main-container");

    // Adjust movement constraints
    let maxX = -((gridSize * step + (gridSize - 1) * gridGap) - viewportWidth);
    let maxY = -(gridHeight - viewportHeight);

    // Function to generate a random typical post-it color
    // function getRandomPostItColor() {
    //     const postItColors = [
    //         "#FFEB3B", // Yellow
    //         "#FFC107", // Amber
    //         "#FFCDD2", // Pink
    //         "#C8E6C9", // Green
    //         "#B3E5FC", // Light Blue
    //         "#FFF9C4", // Pale Yellow
    //         "#F8BBD0", // Light Pink
    //         "#D1C4E9", // Lavender
    //         "#AED581", // Light Green
    //         "#FFE082"  // Soft Orange
    //     ];
    //     return postItColors[Math.floor(Math.random() * postItColors.length)];
    // }

    // Function to generate the initial grid
    function generateInitialGrid() {
        for (let i = 0; i < 100; i++) {
            createGridItem(i + 1);
        }
    }

    // Function to create a grid item
    function createGridItem(index) {
        const item = document.createElement("div");
        item.classList.add("grid-item");

        const img = document.createElement('img');
        img.src = 'images/scan' + index + '_dig.jpg';
        // console.log(index);
        const entry = data[index - 1];

        if (entry) {
            img.alt = entry.Transcription;
        } else {
            img.alt = `Image ${index}`;
        }
        item.appendChild(img);

        // item.textContent = index;
        // item.style.backgroundColor = getRandomPostItColor();
        // item.style.color = "black";
        container.appendChild(item);
    }

    // Append new rows when scrolling down
    function appendNewRow() {
        for (let i = 0; i < gridSize; i++) {
            if (itemIndex > itemsAmount) {  // Reached the end of items, reset 
                itemIndex = 1;
            }
            createGridItem(itemIndex++);
        }

        // Increase grid height and update constraints
        gridHeight += step;
        maxY = -(gridHeight - viewportHeight);
    }

    // Keyboard Navigation
    document.addEventListener("keydown", (event) => {
        switch (event.key) {
            case "ArrowUp":
            case "w":
                y = Math.min(y + step, 0);
                break;
            case "ArrowDown":
            case "s":
                y = Math.max(y - step, maxY);
                break;
            case "ArrowLeft":
            case "a":
                x = Math.min(x + step, 0);
                break;
            case "ArrowRight":
            case "d":
                x = Math.max(x - step, maxX);
                break;
        }
        container.style.transform = `translate(${x}px, ${y}px)`;
    });

    // Click & Drag Movement
    let isDragging = false;
    let startX, startY;

    container.addEventListener("mousedown", (event) => {
        isDragging = true;
        startX = event.clientX;
        startY = event.clientY;
    });

    window.addEventListener("mouseup", () => {
        isDragging = false;
    });

    window.addEventListener("mousemove", (event) => {
        if (!isDragging) return;

        let deltaX = event.clientX - startX;
        let deltaY = event.clientY - startY;

        x = Math.max(Math.min(x + deltaX, 0), maxX);
        y = Math.max(Math.min(y + deltaY, 0), maxY);

        container.style.transform = `translate(${x}px, ${y}px)`;

        startX = event.clientX;
        startY = event.clientY;
    });

    // Scroll Navigation (for Mouse Wheel)
    window.addEventListener("wheel", (event) => {
        event.preventDefault(); // Prevent default scroll behavior

        const scrollSpeed = 100; // Adjust sensitivity

        x = Math.max(Math.min(x - event.deltaX * 1.5, 0), maxX);
        y = Math.max(Math.min(y - event.deltaY * 1.5, 0), maxY);

        container.style.transform = `translate(${x}px, ${y}px)`;

        // If user scrolls to the bottom, append a new row
        if (Math.abs(y) >= gridHeight - viewportHeight - step) {
            appendNewRow();
        }
    }, { passive: false });

    // Touch Navigation (for Mobile)
    let touchStartX, touchStartY;

    window.addEventListener("touchstart", (event) => {
        const touch = event.touches[0];
        touchStartX = touch.clientX;
        touchStartY = touch.clientY;
    }, { passive: false });

    window.addEventListener("touchmove", (event) => {
        event.preventDefault(); // Prevent default scrolling

        const touch = event.touches[0];
        let deltaX = touch.clientX - touchStartX;
        let deltaY = touch.clientY - touchStartY;

        x = Math.max(Math.min(x + deltaX, 0), maxX);
        y = Math.max(Math.min(y + deltaY, 0), maxY);

        container.style.transform = `translate(${x}px, ${y}px)`;

        touchStartX = touch.clientX;
        touchStartY = touch.clientY;

        // If user scrolls to the bottom, append a new row
        if (Math.abs(y) >= gridHeight - viewportHeight - step) {
            appendNewRow();
        }
    }, { passive: false });

    // Load the initial grid
    // document.addEventListener("DOMContentLoaded", generateInitialGrid);

}