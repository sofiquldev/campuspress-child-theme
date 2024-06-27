document.addEventListener("DOMContentLoaded", function(event) {
    // Select all parent toggle-block elements.
    var parentBlocks = document.querySelectorAll('.toggle-block');

    // Iterate over each parent block.
    parentBlocks.forEach(parentBlock => {
        // Select all image-block and content elements within the parent block.
        var allImageBlocks = parentBlock.querySelectorAll('.image-block');
        var allContents    = parentBlock.querySelectorAll('.content');

        // Add click event listener to each image block.
        allImageBlocks.forEach((block, index) => {
            block.addEventListener('click', () => {
                // Remove 'active' class from all blocks and contents.
                allImageBlocks.forEach((innerBlock, innerIndex) => {
                    innerBlock.classList.remove('active');
                    allContents[innerIndex].classList.remove('active');
                });

                // Add 'active' class to the clicked block and corresponding content.
                block.classList.add('active');
                allContents[index].classList.add('active');
            });
        });
    });
});