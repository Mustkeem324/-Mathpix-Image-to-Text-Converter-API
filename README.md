# Mathpix Image to Text Converter

This PHP script allows you to convert an image containing mathematical equations to text using the Mathpix API. It accepts a URL as a parameter, retrieves the image from that URL, sends it to the Mathpix API, and displays the extracted text along with MathJax rendering in an HTML page.

## Prerequisites

- PHP installed on your server.
- Mathpix API credentials (API ID and API Key).

## Installation

1. Clone or download the repository.

    ```bash
    git clone https://github.com/yourusername/your-repository.git
    ```

2. Set up your Mathpix API credentials by replacing the placeholder values in the script:

    ```php
    $api_id = 'your_api_id';
    $api_key = 'your_api_key';
    ```

3. Upload the script to your server or run it locally.

## Usage

1. Access the script through your browser, passing a URL as a parameter:

    ```plaintext
    http://yourdomain.com/convert.php?url=https://example.com/image.jpg
    ```

2. The script will check if the URL is valid and then use the Mathpix API to extract text from the image.

3. The extracted text will be displayed in an HTML page with MathJax rendering.

## Important Notes

- Ensure that your server has access to the internet to communicate with the Mathpix API.
- Make sure to keep your Mathpix API credentials secure.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgments

- [Mathpix](https://mathpix.com/) for providing the API for image to text conversion.
