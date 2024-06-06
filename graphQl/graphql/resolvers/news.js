import { Link, getNews } from "../../models/Link.js";

const newsResolver = {
  index: getNews,
  post: async (parent, args) => {
    // TODO validations
      const link = new Link(null, args.url, args.description);

      if (!(await link.save())) {
        throw new Error("Erreur ...");
      }

      return link;
    },
 };

 export { newsResolver };
