require("dotenv").config();

const path = require("path");
const express = require("express");
const helmet = require("helmet");
// pour pouvoir comprendre les variables dans l'url (?param1="aa"param2="aaaa")
const app = express();
app.use(express.urlencoded({ extended: true }));

const port = process.env.PORT;

const webRouter = require("./routes/web");
const apiRouter = require("./routes/api");

app.use(express.static("public"));

app.set("view engine", "ejs");
app.set("views", path.join(__dirname, "resources/views"));

app.use(helmet());

app.use("/", webRouter);
app.use("/api", apiRouter);

app.listen(port, () => {
 console.log(`Listening at http://localhost:${port}`);
});
