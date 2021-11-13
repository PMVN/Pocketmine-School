import React from 'react';
import Layout from '@theme/Layout';
import useDocusaurusContext from '@docusaurus/useDocusaurusContext';

function Tutorials() {
    const context = useDocusaurusContext();
    const {siteConfig = {}} = context;

  const TutorialBox = props => (
    <a href={props.link} className="tutorial-box">
      <div className="how-to">
        <h5>{props.title}</h5>
        <hr/>
        <p>{props.des}</p>
      </div>
    </a>
  );

    return (
        <Layout 
            title={`Hướng Dẫn`}
            description="Trang Web Hướng Dẫn Mọi Thứ Về PocketMine-MP"
        >
            <div className="section">
                <div className="container">
                    <div className="post">
                        <header className="postHeader t-header">
                            <h1>Tutorials</h1>
                            <hr/>
                        </header>
                        <div className="tutorial-grid">
                            <TutorialBox
                            link="htmap/introduction"
                            title="Cách Tạo Một Plugin Cơ Bản"
                            des="Học cách tạo một plugin PocketMine-MP cơ bản."
                            />
                            <TutorialBox
                            link="htufa/introduction"
                            title="How to Use FormAPI"
                            des="Ever wanted to create forms? Here is a guide." 
                            />
                            <TutorialBox
                            link="htuim/introduction"
                            title="How to Use InvMenu"
                            des="Do you want to make inventory menus? Learn how to do it here." 
                            />
                        </div>
                    </div>
                </div>
            </div>
        </Layout>
    );
}

export default Tutorials;
