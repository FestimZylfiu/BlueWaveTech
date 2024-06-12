<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="pixijs2.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/5.3.3/pixi.min.js"></script>
</head>
<body>
    <div class="pixi-container"></div>
    <script type="module">
      // Importimi i klasave nga pixi.js
        import { Application, MeshPlane, Assets} from 'https://cdn.skypack.dev/pixi.js';

(async () =>
{
    // Create a new application
    const app = new Application();

    // Initialize the application
    await app.init({ background: '#fff', resizeTo: window });

    // Append the application canvas to the document body
    document.body.appendChild(app.canvas);

    // Load the grass texture
    const texture = await Assets.load('data:image/jpeg;base64,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');

    // Create a simple grass plane and add it to the stage
    const plane = new MeshPlane({ texture, verticesX: 10, verticesY: 10 });

    plane.x = 100;
    plane.y = 100;

    app.stage.addChild(plane);

    // Get the buffer for vertex positions.
    const { buffer } = plane.geometry.getAttribute('aPosition');

    // Listen for animate update
    let timer = 0;

    app.ticker.add(() =>
    {
        // Randomize the vertice positions a bit to create movement.
        for (let i = 0; i < buffer.data.length; i++)
        {
            buffer.data[i] += Math.sin(timer / 10 + i) * 0.5;
        }
        buffer.update();
        timer++;
    });
})();

    </script>
</body>
</html