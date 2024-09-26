import React, { useState, useEffect } from "react";
import axios from "axios";

const App = () => {
  const [books, setBooks] = useState([]);

  const getBooks = async () => {
    const res = await fetch("http://localhost:8001/book");
    const books = await res.json();
    console.log(books);
  };

  useEffect(getBooks);

  return <div></div>;
};

export default App;
