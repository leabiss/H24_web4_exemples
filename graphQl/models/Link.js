import { query } from "../database/mariadb.js";
import crypto from "crypto";

class Link {
    constructor(id, url, description) {
      this.id = id || crypto.randomBytes(10).toString("hex");
      this.url = url;
      this.description = description;
    }

    async save() {
      // TODO Update ...
      const res = await query("INSERT INTO news value (?, ?, ?)", [
        this.id,
        this.url,
        this.description,
      ]);

      return res.affectedRows;
    }
 }

 async function getNews() {
    const res = await query("SELECT * FROM news");
    let links = [];

    for (const link of res) {
      links.push(new Link(link.id, link.url, link.description));
    }

    return links;
 }

 export { Link, getNews };
