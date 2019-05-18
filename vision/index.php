<div style="width: 60%; margin-left: 20%;">
                    <h2> TRY the Google Cloud Vision API</h2>
                    <p>
                        Cloud Vision offers both pretrained models via an API and the ability to build custom models using AutoML Vision to provide flexibility depending on your use case.

Cloud Vision API enables developers to understand the content of an image by encapsulating powerful machine learning models in an easy-to-use REST API. It quickly classifies images into thousands of categories (such as, “sailboat”), detects individual objects and faces within images, and reads printed words contained within images. You can build metadata on your image catalog, moderate offensive content, or enable new marketing scenarios through image sentiment analysis.

AutoML Vision Beta makes it possible for developers with limited machine learning expertise to train high-quality custom models. After uploading and labeling images, AutoML Vision will train a model that can scale as needed to adapt to demands. AutoML Vision offers higher model accuracy and faster time to create a production-ready model.
<a href="https://cloud.google.com/vision/" style="text-decoration: none;">GO to the google cloud vision platform</a> to learn more.
                    </p>
                <form action="vision/check.php" method="post" enctype="multipart/form-data">
                    <div style="margin-top: 10px;">
                        <input type="file" name="image" accept="image/*" class="form-control" style="background-color: rgb(255,255,255); border-radius: 5px;">
                        <button type="submit" style="border-radius: 0px; margin-bottom: 10px; margin-top: 5px; border-radius: 5px; width: 80%; text-transform: uppercase; background-color: rgb(255,255,255); border-color: green; font-size: 20px; color: rgb(0,200,0);"><strong>EVALUATE IMAGE</strong></button>
                    </div>
                </form>
            </div>