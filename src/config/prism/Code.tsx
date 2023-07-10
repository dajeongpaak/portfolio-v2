import { useEffect } from "react";
import Prism from "prismjs";
import "../../styles/prismTheme/prism-vsc-dark-plus.css";


import styles from './Code.module.scss'

export default function Code({ code, language }:any) {
  useEffect(() => {
    Prism.highlightAll();
  }, []);
  return (
    <div className={styles.code}>
      <pre>
        <code className={`language-${language}`}>{code}</code>
      </pre>
    </div>
  );
}