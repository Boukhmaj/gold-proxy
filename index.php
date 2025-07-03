// api/gold-proxy.js

import fetch from 'node-fetch';

export default async function handler(req, res) {
  const currency = req.query.currency || 'mad';
  const url = `https://freegoldprice.org/api/xau?currency=${currency}`;

  try {
    const response = await fetch(url);
    const data = await response.json();
    res.status(200).json(data);
  } catch (error) {
    res.status(500).json({ error: 'تعذر تحميل الأسعار' });
  }
}
