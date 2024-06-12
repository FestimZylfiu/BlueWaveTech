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
    await app.init({ background: '#1099bb', resizeTo: window });

    // Append the application canvas to the document body
    document.body.appendChild(app.canvas);

    // Create and add a container to the stage
    const container = new Container();

    app.stage.addChild(container);

    // Load the bunny texture
    const texture = await Assets.load('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUpNEExYbd1SuMijAk7jNj_YznhGnSxhoc0A&usqp=CAU');

    // Create a 5x5 grid of bunnies in the container
    for (let i = 0; i < 25; i++)
    {
        const bunny = new Sprite(texture);

        bunny.x = (i % 5) * 40;
        bunny.y = Math.floor(i / 5) * 40;
        container.addChild(bunny);
    }

    // Move the container to the center
    container.x = app.screen.width / 2;
    container.y = app.screen.height / 2;

    // Center the bunny sprites in local container coordinates
    container.pivot.x = container.width / 2;
    container.pivot.y = container.height / 2;

    // Listen for animate update
    app.ticker.add((time) =>
    {
        // Continuously rotate the container!
        // * use delta to create frame-independent transform *
        container.rotation -= 0.01 * time.deltaTime;
    });
})();


    </script>
</body>
</html