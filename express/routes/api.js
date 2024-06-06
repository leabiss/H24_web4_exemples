const express = require("express");
const router = express.Router();
const apiController = require("../controllers/ApiController");
const loggingMiddleware = require("../middleware/Login");

router.use(loggingMiddleware);

router
 .route("/")
 .get(apiController.index)
 .post(apiController.store)
 .put(apiController.update);

module.exports = router;
