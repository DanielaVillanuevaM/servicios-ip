const express = require("express");
const { exec } = require("child_process");
const app = express();
const port = 3000;

// Function to run Nmap
function runNmap(target, callback) {
    const command = `nmap ${target}`;

    exec(command, (error, stdout, stderr) => {
        if (error) {
            console.error(`Error executing Nmap: ${error.message}`);
            return callback(error, null);
        }
        if (stderr) {
            console.error(`Nmap stderr: ${stderr}`);
            return callback(stderr, null);
        }
        callback(null, stdout);
    });
}

// API route to handle Nmap scans
app.get("/scan", (req, res) => {
    const target = req.query.target;

    if (!target) {
        return res.status(400).json({ error: "Target is required" });
    }

    runNmap(target, (err, result) => {
        if (err) {
            return res.status(500).json({ error: "Error running Nmap" });
        }
        res.json({ result });
    });
});

// Start the server
app.listen(port, () => {
    console.log(`Server running on http://localhost:${port}`);
});
