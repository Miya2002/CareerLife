<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Grid Layout with Animation</title>
<style>
  /* Grid container */
  .grid-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    justify-content: center; /* Center content horizontally */
  }
  
  /* Common wrapper for both left and right content */
  .content-wrapper {
    background-color: #f0f0f0; /* Light background color */
    padding: 20px;
    border-radius: 10px;
  }

  /* Left side div */
  .left-div {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2); /* Higher shadow */
    border: 2px solid #777; /* Higher shade border */
    border-radius: 10px;
    font-family: 'Arial', sans-serif; /* Unique font for heading */
  }

  /* Heading */
  .left-div h2 {
    margin-bottom: 10px;
    font-family: 'Georgia', serif; /* Unique font for heading */
  }

  /* Paragraph */
  .left-div p {
    margin-bottom: 20px;
    text-align: center;
    animation: text-animation 2s infinite alternate;
  }

  /* Button */
  .left-div button {
    padding: 10px 20px;
    background-color: #fff; /* Default background color */
    color: #000; /* Default text color */
    border: none;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s; /* Transition effect */
  }

  /* Hover effect for button */
  .left-div button:hover {
    background-color: #444; /* Dark grey background */
    color: #fff; /* White text */
  }

  /* Right side div */
  .right-div {
    position: relative;
    overflow: hidden;
  }

  /* Wrapper for right content */
  .right-content {
    display: flex;
    justify-content: center;
  }

  /* Image animation */
  .image-animation {
    animation: image-scale 5s infinite alternate;
  }

  @keyframes text-animation {
    from { color: #000; }
    to { color: #888; }
  }

  @keyframes image-scale {
    from { transform: scale(1); }
    to { transform: scale(1.1); }
  }
</style>
</head>
<body>

<div class="grid-container">
  <div class="content-wrapper">
    <div class="left-div">
      <h2>Left Side</h2>
      <p class="animated-text">This is a sample paragraph with animated text.</p>
      <button>Click Me</button>
    </div>
  </div>
  <div class="content-wrapper right-content">
    <div class="right-div">
      <img src="path/to/your/image.jpg" alt="Animated Image" class="image-animation">
    </div>
  </div>
</div>

</body>
</html>
