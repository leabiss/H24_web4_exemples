const typeDefs = `#graphql
 type Query {
   """
   Retourne l'info sur notre projet.
   """
   info: String!
   """
   ...
   """
   feed: [Link!]!
 }

 type Mutation {
    """
    Pour ajouter des liens d'intérêts.
    """
    post(url: String!, description: String!): Link!
  }

 """
 Un lien d'intérêt.
 """
 type Link {
   id: ID!
   description: String!
   url: String!
 }
`;

export { typeDefs };
