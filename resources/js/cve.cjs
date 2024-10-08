const express = require("express");
const axios = require("axios");
const app = express();
const port = 2000;

const NVD_API_URL = "https://services.nvd.nist.gov/rest/json/cves/1.0";
const API_KEY = "63bcf82b-b510-4eda-9cc4-86cb87c14c1f"; // Replace with your actual API key

// Function to fetch CVE data by CVE ID
async function getCVEById(cveId) {
    try {
        const response = await axios.get(`${NVD_API_URL}?cveId=${cveId}`, {
            headers: {
                apiKey: API_KEY,
            },
        });
        return response.data;
    } catch (error) {
        console.error(`Error fetching CVE: ${error}`);
        throw error;
    }
}

// API route to fetch CVE details by CVE ID
app.get("/cve", async (req, res) => {
    const cveId = req.query.cveId;

    if (!cveId) {
        return res.status(400).json({ error: "CVE ID is required" });
    }

    try {
        const data = await getCVEById(cveId);
        res.json(data);
    } catch (error) {
        res.status(500).json({ error: "Error fetching CVE data" });
    }
});

// Start the Express server
app.listen(port, () => {
    console.log(`Server running on http://localhost:${port}`);
});
